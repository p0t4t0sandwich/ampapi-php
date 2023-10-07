#!/bin/python3
from __future__ import annotations

import requests
import json

type_dict = {
    "InstanceDatastore": "InstanceDatastore",
    "ActionResult": "ActionResult",
    "Int32": "int",
    "IEnumerable<InstanceDatastore>": "Result",
    "RunningTask": "Result",
    "Task<RunningTask>": "Task",
    "IEnumerable<JObject>": "Result",
    "Guid": "string",
    "IEnumerable<DeploymentTemplate>": "Result",
    "String": "string",
    "DeploymentTemplate": "stdClass",
    "Boolean": "bool",
    "List<String>": "ArrayObject",
    "PostCreateActions": "stdClass",
    "Dictionary<String, String>": "ArrayObject",
    "RemoteTargetInfo": "RemoteTargetInfo",
    "IEnumerable<ApplicationSpec>": "Result",
    "Void": "stdClass",
    "IEnumerable<EndpointInfo>": "Result",
    "IEnumerable<IADSInstance>": "Result",
    "JObject": "ArrayObject",
    "PortProtocol": "stdClass",
    "ActionResult<String>": "ActionResult",
    "IADSInstance": "Result",
    "Uri": "string",
    "IEnumerable<PortUsage>": "Result",
    "Dictionary<String, Int32>": "ArrayObject",
    "LocalAMPInstance": "stdClass",
    "ContainerMemoryPolicy": "stdClass",
    "Single": "stdClass",
    "Int64": "int",
    "FileChunkData": "stdClass",
    "IEnumerable<BackupManifest>": "Result",
    "Nullable<DateTime>": "stdClass", # Optional?
    "IEnumerable<IAuditLogEntry>": "Result",
    "Dictionary<String, IEnumerable<JObject>>": "Result",
    "IDictionary<String, String>": "ArrayObject",
    "List<JObject>": "ArrayObject",
    "String[]": "ArrayObject",
    "Nullable<Boolean>": "bool", # Optional?
    "ScheduleInfo": "stdClass",
    "Int32[]": "ArrayObject",
    "TimeIntervalTrigger": "stdClass",
    "IEnumerable<WebSessionSummary>": "Result",
    "IList<IPermissionsTreeNode>": "ArrayObject",
    "WebauthnLoginInfo": "stdClass",
    "IEnumerable<WebauthnCredentialSummary>": "Result",
    "IEnumerable<RunningTask>": "Result",
    "ModuleInfo": "Result",
    "Dictionary<String, Dictionary<String, MethodInfoSummary>>": "ArrayObject",
    "Object": "stdClass",
    "UpdateInfo": "Result",
    "IEnumerable<ListeningPortSummary>": "Result",
    "Task<JObject>": "Task",
    "Task<ActionResult<TwoFactorSetupInfo>>": "Task",
    "Task<IEnumerable<String>>": "Task",
    "Task<UserInfo>": "Task",
    "Task<IEnumerable<UserInfoSummary>>": "Task",
    "Task<IEnumerable<UserInfo>>": "Task",
    "Task<String>": "Task",
    "Task<AuthRoleSummary>": "Task",
    "Task<IEnumerable<AuthRoleSummary>>": "Task",
    "Task<IDictionary<Guid, String>>": "Task",
    "Task<ActionResult>": "Task",
    "Task<ActionResult<Guid>>": "Task",
    "Task<ActionResult<LicenceInfo>>": "Task",

    ## Custom types
    # "Result<Instance>": "Result<Instance>",
    # "Result<RemoteTargetInfo>": "Result<RemoteTargetInfo>",
    "SettingsSpec": "SettingsSpec",
    "Status": "Status",
    "Updates": "Updates",
    # "Result<Map<String, String>>": "Result<Map<String, String>>",
    "LoginResult": "LoginResult",
    # "Result<List<FileDirectory>>": "Result<List<FileDirectory>>",
    # "Result<ActionResult<String>>": "Result<ActionResult<String>>",
}

custom_types = {
    # API.ADSModule.GetInstance
    # "ADSModule.GetInstance": "Result<Instance>",
    # API.ADSModule.GetTargetInfo
    # "ADSModule.GetTargetInfo": "Result<RemoteTargetInfo>",

    # API.Core.GetSettingsSpec
    "Core.GetSettingsSpec": "SettingsSpec",
    # API.Core.GetStatus
    "Core.GetStatus": "Status",
    # API.Core.GetUpdates
    "Core.GetUpdates": "Updates",
    # API.Core.GetUserList
    # "Core.GetUserList": "Result<Map<String, String>>",
    # API.Core.Login
    "Core.Login": "LoginResult",

    # API.FileManagerPlugin.GetDirectoryListing
    # "FileManagerPlugin.GetDirectoryListing": "Result<List<FileDirectory>>",
    # API.FileManagerPlugin.ReadFileChunk
    # "FileManagerPlugin.ReadFileChunk": "Result<ActionResult<String>>",
}

def generate_apimodule_method(module: str, method: str, method_spec: dict):
    # Read the template file
    api_module_method_template = ""
    with open("templates/api_module_method.txt", "r") as tf:
        api_module_method_template = tf.read()
        tf.close()

    # Get the method description
    description = ""
    if "Description" in method_spec.keys():
        description = "\n     * " + method_spec["Description"]

    # Get the method parameters
    parameters_docs = ""
    methodParams = method_spec["Parameters"]
    if len(methodParams) > 0:
        parameters_docs += "\n"
    for i in range(len(methodParams)):
        api_module_method_parameter_doc_template = ""
        with open("templates/api_module_method_parameter_doc.txt", "r") as tf:
            api_module_method_parameter_doc_template = tf.read()
            tf.close()

        name = methodParams[i]["Name"]
        type_name = methodParams[i]["TypeName"]

        # Print out the type if it hasn't been added to the type_dict
        if not type_name in type_dict.keys(): print(type_name)

        description = methodParams[i]["Description"]
        optional = methodParams[i]["Optional"]
        if optional == "true": type_name += ", " + optional

        template = api_module_method_parameter_doc_template\
            .replace("%METHOD_PARAMETER_NAME%", name)\
            .replace("%METHOD_PARAMETER_TYPE%", type_dict[type_name])\
            .replace("%METHOD_PARAMETER_DESCRIPTION%", description)\
            .replace("%METHOD_PARAMETER_OPTIONAL%", str(optional))

        parameters_docs += template
    parameters_docs = parameters_docs[:-1]

    # Get the method return type
    return_type = method_spec["ReturnTypeName"]

    # Print out the type if it hasn't been added to the type_dict
    if not return_type in type_dict.keys(): print(return_type)
    return_type = type_dict[return_type]

    # Get the method parameters
    parameters = ""
    for i in range(len(methodParams)):
        name = methodParams[i]["Name"]
        type_name = methodParams[i]["TypeName"]

        # Print out the type if it hasn't been added to the type_dict
        if not type_name in type_dict.keys(): print(type_name)
        parameters += f"{type_dict[type_name]} ${name}, "

    parameters = parameters[:-2]

    # Get the parameters for the data map
    map_string = ""
    if len(methodParams) > 0:
        map_string += "\n"
    for i in range(len(methodParams)):
        api_module_method_parameter_map_template = ""
        with open("templates/api_module_method_parameter_map.txt", "r") as tf:
            api_module_method_parameter_map_template = tf.read()
            tf.close()

        name = methodParams[i]["Name"]
        map_string += api_module_method_parameter_map_template.replace("%METHOD_PARAMETER_NAME%", name)
    map_string = map_string[:-1]

    # Replace placeholders
    template = api_module_method_template\
        .replace("%METHOD_DESCRIPTION%", description)\
        .replace("%METHOD_PARAMETER_DOC%", parameters_docs)\
        .replace("%MODULE_NAME%", module)\
        .replace("%METHOD_NAME%", method)\
        .replace("%METHOD_PARAMETERS%", parameters)\
        .replace("%METHOD_RETURN_TYPE%", return_type)\
        .replace("%METHOD_PARAMETER_MAP%", map_string)

    # End result will return a string
    return template

def generate_apimodule(module: str, methods: dict):
    # Read the template file
    api_module_template = ""
    with open("templates/api_module.txt", "r") as tf:
        api_module_template = tf.read()
        tf.close()

    # Create a new file called f{module}.java
    f = open(f"../src/apimodules/{module}.php","w+")
    f.write(api_module_template.replace("%MODULE_NAME%", module))

    for method in methods.keys():
        f.write(generate_apimodule_method(module, method, methods[method]))

    f.write("    }\n?>")
    f.close()

def generate_spec(spec: dict):
    for module in spec.keys():
        if module == "CommonCorePlugin": continue
        generate_apimodule(module, spec[module])

def load_custom_types(spec: dict):
    for type_index in custom_types.keys():
        type_module = type_index.split(".")[0]
        type_method = type_index.split(".")[1]

        # Update the return type
        spec[type_module][type_method]["ReturnTypeName"] = custom_types[type_index]

if __name__ == "__main__":
    # Load remote file
    res = requests.get("https://raw.githubusercontent.com/p0t4t0sandwich/ampapi-spec/main/APISpec.json")
    spec = json.loads(res.content)

    # Load custom types
    load_custom_types(spec)

    generate_spec(spec)
# Webhooks for SuiteCRM 8.x

Forked from [Github](https://github.com/SidorkinAlex/SuiteCRMWebHooks) | 

![image](https://portalzine.de/my-assets/github/suitecrm/webhook/1.png)
![image](https://portalzine.de/my-assets/github/suitecrm/webhook/2.png)

## Installation

Before installation, you must make a backup copy of the system files!

To install, you need to download the latest version of the plugin from the link https://github.com/SidorkinAlex/SuiteCRMWebHooks/releases/download/1.0/Build.zip

Then in SuiteCRM open the Module Loader (Administration -> Module Loader)

Download package archive

Click the install button.


## Using
   
   The use of this module is assumed through the processes module.
   
   In the processes module, select the necessary conditions for calling WebHook.
   
   In the Actions section, specify the creation of the record and select the Web Hook Request module
   
   in the created record, in the URL field, specify the URL for the reverse search.
   
   in the fields " 01...100 key "specify the parameter key in the fields" 01...100value " specify the appropriate value (it can be pulled from the linked module)
   ```

Array
(
    [first_name] => Kilburn
    [last_name] => Micah
)


   ```
   For the convenience of viewing the execution results, it is also recommended to specify Name, but this is not necessary.
   
   In the "Request Type" field, select the json or form-data request type (if the type is not specified, the request will be sent as form data)
   
   and to send the request, specify the status "ready to send" (if you do not specify this status, the request will not be executed)
   
   If the field is 01...If 100key is empty, then the corresponding value is 01...100 value will not be sent.
   
   
   If you need to specify the value of a field in the url, such as id, then we recommend that you build the request in 2 stages
   
   1 at the first stage we collect the necessary data according to the condition and specify the in process status,
   
   2 at the second stage, we edit the record in the Web Hook Request module and collect the url field and change the status to " ready to send"

### Example
Consider an example:
you need to send a request to http://0.0.0.0/test/ID_Contact
with a post array

first_name = First Name Contact

last_name = Last Name Contact

to do this, we create a process in which the target module is Contacts and set the multiple launch checkbox.

![image](https://portalzine.de/my-assets/github/suitecrm/webhook/3.png)

In the Actions section, specify the necessary parameters

Next, we create a 2 process, which when creating an entry in the WEB_HOOKS_REQUEST module

![image](https://portalzine.de/my-assets/github/suitecrm/webhook/4.png)

with the condition that the name of the record matches the name specified in the first process.

in the actions we create CalculateFields at the beginning
in which we replace the value in the url with ID candidate

### License
MIT



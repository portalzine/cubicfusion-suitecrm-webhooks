# Webhooks for SuiteCRM 8.x
A SuiteCRM module that enables webhook functionality for your SuiteCRM installation, bringing webhook capabilities to modern SuiteCRM versions with improved PHP 8.3 compatibility.
This module is perfect for integrating SuiteCRM with external applications, triggering automated workflows, or synchronizing data across multiple platforms through webhook-based communication.
## Key Features:

- Full access to the vast amount of data provided through the workflow integration (Leads, Contacts, Prospects etc)
- Send HTTP POST requests to external endpoints when CRM events occur
- Configurable headers including authorization tokens and custom headers
- Compatible with SuiteCRM 8.8+ and PHP 8.3
- JSON payload encoding for seamless API integrations
- Easy installation through SuiteCRM's Module Loader

Forked from [Github](https://github.com/SidorkinAlex/SuiteCRMWebHooks) | https://github.com/SidorkinAlex/SuiteCRMWebHooks

## Changes so far

This is still in early testing ...

v0.1.1-alpha

1. Fixed JSON encoding for request
2. Updated screenshots
3. Tested with SuiteCRM 8.9
4. Further cleanup
5. Add default bean properties to the data send out
6. Add Header options. Headers are extracted from the fields array and merged with the default content-type header
   1. Authorization: Bearer YOUR_ACCESS_TOKEN 
   2. X-Custom-Header: Value 
   3. Cache-Control: no-cache
   4. X-Rate-Limit: 1000
   5. X-API-Key: your-api-key

v0.1.0-alpha

1. Fixed Fatal Errors with PHP 8.3 and SuiteCRM 8.8
2. Fixed Language Files
3. Initial cleanup



## Tested with

- SuiteCRM 8.9 + PHP 8.3

## Plans

- Further cleanup
- Preload with some optional demo data
- Restructure code
- Make a demo video :)

## Installation

1. Before installation, you should make a backup copy of the current system files!
2. To install, you need to download the latest version of the module. Check the release area or pull from the module_build branch.
3. In SuiteCRM open the Module Loader (Admin -> Module Loader)
4. Upload package archive
5. Click to install.

## Setup

Checkout this video for now:
Bastian Hammer's Youtube Video (https://www.youtube.com/watch?v=djq2036cARM)

![image](https://portalzine.de/my-assets/github/suitecrm/webhook/webhook_1.png)
![image](https://portalzine.de/my-assets/github/suitecrm/webhook/webhook_2.png)
![image](https://portalzine.de/my-assets/github/suitecrm/webhook/webhook_3.png)
![image](https://portalzine.de/my-assets/github/suitecrm/webhook/webhook_4.png)
![image](https://portalzine.de/my-assets/github/suitecrm/webhook/webhook_5.png)
![image](https://portalzine.de/my-assets/github/suitecrm/webhook/webhook_6.png)
![image](https://portalzine.de/my-assets/github/suitecrm/webhook/webhook_7.png)

### License

MIT

## Feedback

* I am open for your suggestions and feedback - Thank you for using or trying this out!
* Drop me a line [@pztv][2] on Twitter
* Follow me on [my Facebook page][3]
* Or send an Email to [ideas@cubicfusion.com][4] ;-)

## Additional Info

**Idea Behind / Philosophy:**  

**cubicFUSION** is my personal playground. I planned to make many of my projects public, but time is limited and running customer projects always a priority.  
[Alex @ portalZINE NMN - Development meets Creativity][1]

**ENJOY!**

[1]:    https://portalzine.de/
[2]:    http://twitter.com/pztv
[3]:    http://www.facebook.com/portalzine
[4]:    mailto:ideas@cubicfusion.com

#FOSUserTemplatesBundle
Templates for FOSUserBundle 

##Features
- Login form
- Registration form (dialogs and email confirm form)
- Profile (edit and change password)
- Restore password form
- Gravatar support

##Installation
Before, install and configure [FOSUserBundle](https://github.com/FriendsOfSymfony/FOSUserBundle)

Install with *Composer*:

`composer require it2k/fos-user-templates-bundle 1.x`

Add lines to AppKernel.php

```php

    public function registerBundles()
    {
        $bundles = array(
            ...
            new It2k\FOSUserTemplatesBundle\It2kFOSUserTemplatesBundle(),
            ...
        );
    }
```

##Screenshots
####Change password form
![Change password form](http://www.it2k.ru/projects/fos-user-templates-bundle/screenshots/change_password.png "Change password form")
####Login form
![Login form](http://www.it2k.ru/projects/fos-user-templates-bundle/screenshots/login.png "Login form")
####Registration form
![Registration form](http://www.it2k.ru/projects/fos-user-templates-bundle/screenshots/registration.png "Registration form")

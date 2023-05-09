# Email Gmail Plugin

**This README.md file should be modified to describe the features, installation, configuration, and general usage of the plugin.**

The **Email Gmail** Plugin is an extension for [Grav CMS](https://github.com/getgrav/grav). Gmail integration for new Email plugin

## Installation

Installing the Email Gmail plugin can be done in one of three ways: The GPM (Grav Package Manager) installation method lets you quickly install the plugin with a simple terminal command, the manual method lets you do so via a zip file, and the admin method lets you do so via the Admin Plugin.

### GPM Installation (Preferred)

To install the plugin via the [GPM](https://learn.getgrav.org/cli-console/grav-cli-gpm), through your system's terminal (also called the command line), navigate to the root of your Grav-installation, and enter:

    bin/gpm install email-gmail

This will install the Email Gmail plugin into your `/user/plugins`-directory within Grav. Its files can be found under `/your/site/grav/user/plugins/email-gmail`.

### Admin Plugin

If you use the Admin Plugin, you can install the plugin directly by browsing the `Plugins`-menu and clicking on the `Add` button.

## Configuration

Before configuring this plugin, you should copy the `user/plugins/email-gmail/email-gmail.yaml` to `user/config/plugins/email-gmail.yaml` and only edit that copy.

Here is the default configuration and an explanation of available options:

```yaml
enabled: true
```

Note that if you use the Admin Plugin, a file with your configuration named email-gmail.yaml will be saved in the `user/config/plugins/`-folder once the configuration is saved in the Admin.

## Usage

As Gmail no longer supports the "allow less secure apps" option, you now need to have 2FA enabled on the account and setup an "App Password" to create a specific password rather than your general account password.  Follow these instructions: https://support.google.com/accounts/answer/185833

## Credits

This plugin is made possible my `symfony/mailer` + `symfony/google-mailer`


# dot-controller-plugin-flashmessenger

Flashmessenger controller plugin for easy access to the flash messenger from any controller.

![OSS Lifecycle](https://img.shields.io/osslifecycle/dotkernel/dot-controller-plugin-flashmessenger)
[![GitHub license](https://img.shields.io/github/license/dotkernel/dot-controller-plugin-flashmessenger)](https://github.com/dotkernel/dot-controller-plugin-flashmessenger/blob/2.0.1/LICENSE.md)

# NOTE

> **dot-controller-plugin-flashmessenger** is **archived** and will receive no further development!

# Installation

Run the following command in your project root directory
```bash
$ composer require dotkernel/dot-controller-plugin-flashmessenger
```

This will also install packages `dotkernel/dot-controller` and `dotkernel/dot-flashmessenger` as dependencies.
Next, make sure you merge the `ConfigProvider` to your application's configuration in order to register the default dependencies.

## Usage

In any controller, you can access the plugin by calling
```php
$this->messenger()->...
```

The methods defined by this plugin are
```php
$this->messenger()->addMessage($namespace, $value);
```
Adds a session message to at the requested namespace

```php
$this->messenger()->addData($key, $data);
```
Almost the same as the addMessage method, but named differently in order to reserve this function for adding general session data.

There are also some shortcuts to the addMessage method which are using predefined namespaces
```php
$this->messenger()->addError($error);

$this->messenger()->addWarning($message);

$this->messenger()->addInfo($message);

$this->messenger()->addSuccess($message);
```

Also, the getter methods
```php
$this->messenger()->getMessages($namespace = null);
```
Gets all messages under a namespace, or if namespace is not specified it will return all namespaces with all messages

```php
$this->messenger()->getData($key);
```
Gets the data stored at the specified key

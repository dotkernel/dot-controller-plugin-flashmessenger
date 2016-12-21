# dot-controller-plugin-flashmessenger

Flashmessenger controller plugin for easy access to the flash messenger from any controller.

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
$this->flashMessenger()->...
```

The methods defined by this plugin are
```php
$this->flashMessenger()->addMessage($namespace, $value);
```
Adds a session message to at the requested namespace

```php
$this->flashMessenger()->addData($key, $data);
```
Almost the same as the addMessage method, but named differently in order to reserve this function for adding general session data.

There are also some shortcuts to the addMessage method which are using predefined namespaces
```php
$this->flashMessenger()->addError($error);

$this->flashMessenger()->addWarning($message);

$this->flashMessenger()->addInfo($message);

$this->flashMessenger()->addSuccess($message);
```

Also, the getter methods
```php
$this->flashMessenger()->getMessages($namespace = null);
```
Gets all messages under a namespace, or if namespace is not specified it will return all namespaces with all messages

```php
$this->flashMessenger()->getData($key);
```
Gets the data stored at the specified key
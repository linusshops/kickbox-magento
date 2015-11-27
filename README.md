# kickbox-magento
Kickbox.io email verification for Magento

This module is a wrapper for the [Kickbox.io php api library](https://github.com/kickboxio/kickbox-php).

## Installation
This should be installed using Composer. A magento build should also include the 
Magento Composer Installer. This module follows the module structure guidelines 
provided by Firegento, which will also make it very easy to submit to the 
Firegento Composer Repository.

*As this depends on a non-Magento composer module, version 3+ of Magento Composer
Installer is required.*

## Usage

### Verify an email
```
//'risky' emails are also considered deliverable
Mage::helper('linus_kickbox')->verifyIsDeliverable('samuel@dersam.net');
```

### Verify an email using the response model
```
/** @var $verifiedEmail Linus_Kickbox_Model_Email */
$verifiedEmail = Mage::helper('linus_kickbox')->verify('samuel@dersam.net');
$isValid = $verifiedEmail->isDeliverable();
//You can also access any of the response fields from Kickbox as magic methods.
$result = $verifiedEmail->result();
$didYouMean = $verifiedEmail->did_you_mean();
$sendex = $verifiedEmail->sendex();
```

# Author
Samuel Schmidt

# License
MIT

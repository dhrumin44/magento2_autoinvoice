# magento2_autoinvoice

AutoInvoice automatically sends an invoice when payment is received.

# Support

This plugin supports Magento 2 up to version 2.2.2. It might work on more recent versions, but we cannot make any guarantees.

# Installation

1. Please go to the Magento2 root directory and run the following commands in the shell:

    php bin/magento module:enable Dmn112_Autoinvoice<br>
    php bin/magento setup:upgrade<br>
    php bin/magento setup:di:compile<br>
    php bin/magento cache:clean<br>
    
 2. If Magento is running in production mode, deploy static content:
 
    php bin/magento setup:static-content:deploy -f


# Uninstall

  php bin/magento module:uninstall Dmn112_Autoinvoice<br>
  php bin/magento setup:upgrade

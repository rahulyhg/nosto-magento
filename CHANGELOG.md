All notable changes to this project will be documented in this file. This project adheres to Semantic Versioning.

### 2.8.2
* Change the customer reference type to be text

### 2.8.1
* Add css for hiding the page type tagging

### 2.8.0
* Add support for using multiple currencies
* Add notifications for incomplete or invalid Nosto settings
* Add support for PHP 7
* Remove field date_published from product tagging
* Add possibility to choose attribute for brand tagging
* Add page type tagging
* Check that Nosto account is not installed into a different domain
* Use direct include for Nosto tagging
* Introduce customer reference for Nosto

### 2.7.1
* Fix product URL generation for Magento EE

### 2.7.0
* Introduce product attribute tagging 
* Support for product URLs without store parameter
* Force Oauth to use always the base url
* Define recommendation as viewed when calling Nosto's addToCart method

### 2.6.15
* Add support for sending the account details & new platform UI
* Add check if table `nosto_tagging_customer` already exists before creating it
* Add visitor checksum tagging
* Strip out _Main Website_ from the default account title
* Disable tagging categories if there are hidden categories in the category path

### 2.6.14
* Support for SDK version headers

### 2.6.13
* Update modman settings
* Bug fixes for multi currency handling

### 2.6.12
* Restore the type casting to quantity

### 2.6.11
* Hide hidden categories from tagging
* Remove type casting from templates
* Loosen up data validation for order items
* Add search term tagging
* Update products to Nosto regardless of the product visibility

### 2.6.10
* Bug fixes

### 2.6.9
* Fix resolving the payment provider
* Fix duplicate content-type header in admin controller

### 2.6.8
* Tagging for 404 pages and order confirmation page
* Loosen up the data validation
* Support for coupon discounts on product level 
* Fix tagging currency for product
* Fix ACL handling after SUPEE-6285

### 2.6.7
* Ignore order status in tagging and API calls if they are not set properly
* Ignore empty string values for order buyer information in tagging and API calls

### 2.6.6
* Fix account removal for self-signup accounts through the iframe
* Fix uncaught "InvalidArgumentException" exception when order status is missing
a label
* Make order buyer info optional in tagging and API calls

### 2.6.5
* Add "external_order_ref" to order tagging and API requests in order to better
track orders

### 2.6.4
* Fix redirect to admin store after OAuth is finished

### 2.6.3
* Fix tax price calculation for fixed priced bundle and grouped products

### 2.6.2
* Fix account owner email address assignment when creating new account

### 2.6.1
* Re-package for Enterprise Edition release

### 2.6.0
* Add better error handling and notifications to Nosto account OAuth cycle
* Add support for bundle products with fixed pricing
* Add support for using "tag1", "tag2" and "tag3" properties in Nosto product
tagging and product update API
* Add support for Nosto partner code in account creation API
* Add support for overriding meta data models
* Fix bug in cart/order item name tagging while running Magento Dev Mode
* Fix bug in product export while having product flat tables enabled
* Fix bug in order confirmation API when payment provider is no longer available

### 2.5.1
* Re-packaged extension to support installs from Magento Connect with the latest
(1.9.2) Magento version.

### 2.5.0
* Add order status and payment provider info to order tagging
* Add support for account specific sub-domains when configuring Nosto
* Add support for choosing the product image version used in tagging
* Fix product update event observer store scope
* Fix cart/order tagging to always tag the same product ID as on the product
page the item was added to the cart/ordered from

### 2.4.0
* Deprecate product re-crawl feature and implement product update API in it's
place
* Add JavaScript "add-to-cart" feature to enable adding products to cart
directly from recommendations
* Refactor order status handling in order confirmations and order exports

### 2.3.0
* Add payment status info to server side order confirmations and order exports

### 2.2.1
* Add Enterprise support

### 2.2.0
* Change product re-crawl to send both id and url for products that have been
added/modified

### 2.1.3
* Fix reading email address of account owner when creating new account

### 2.1.2
* Fix product urls to be tagged with current store info so the crawler sees the
correct product data

### 2.1.1
* Fix internal store view handling in backend to not apply the current store
scope when configuring nosto

### 2.1.0
* New extension administration UI
* Fix product re-crawl API call to only load needed product meta data

### 2.0.1
* Fix product tagging to check for tags only if Mage_Tag is enabled
* Add Mage_Core, Mage_Catalog and Mage_Sales as extension dependencies

### 2.0.0
* Support current category tagging on product pages
* Update Nosto php-sdk

### 1.3.0
* Support for product data re-crawling when a product is deleted
* Update Nosto php-sdk
* Fix offset for order/product history data exports
* Fix unmatched server-to-server order confirmations

### 1.2.0
* New configuration page for the extension in the store backend
* Support for creating new Nosto accounts from the store backend
* Support for linking existing Nosto accounts from the store backend
* Support for German, Spanish and French localizations in the store backend
* Support for additional recommendation blocks on the shops home page
* Support for server-to-server order confirmations
* Support for order/product history data export upon Nosto account creation
* Support for product data re-crawling when product data changes in the store

### 1.1.7
* Magento CE 1.9 dependency version fix

### 1.1.6
* Magento CE 1.9 support

### 1.1.5
* PHP 5.4 support

### 1.1.4
* Nosto embed script update

### 1.1.3
* PHP 5.3.28 compatibility

### 1.1.2
* Repackaged the 1.1.1 extension with proper extension author name. 

### 1.1.1
* Top list category is no longer created automatically
* 'nosto_id' attribute is no longer added as a product category attribute.
* Placeholder image (if configured) is used in recommendations if actual product
image is not available.

### 1.1.0
* Support for tagging grouped products
* New configuration setting for enabling/disabling collection of customer email-
addresses

### 1.0.6
* Fix: install script could not create Top Sellers category while the "Use Flat
Catalog Category" option was enabled

### 1.0.5
* Dist package updated with correct metadata

### 1.0.4
* Fix: remove unused observer event from config.xml

### 1.0.3

### 1.0.2

### 1.0.1

### 1.0.0
* initial release

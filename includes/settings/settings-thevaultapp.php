<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Settings for TheVaultApp Gateway.
 */
$settings = array(
	'basic' => array(
		'title'       => __( 'Basic Settings', 'woocommerce-gateway-thevaultapp' ),
		'type'        => 'title',
		'description' => '',
	),
	'enabled' => array(
		'title'   => __( 'Enable/Disable', 'woocommerce-gateway-thevaultapp' ),
		'type'    => 'checkbox',
		'label'   => __( 'Enable This Solution', 'woocommerce-gateway-thevaultapp' ),
		'description' => __( 'This enables Thevaultapp Checkout which allows customers to checkout directly via Thevaultapp from your cart page.', 'woocommerce-gateway-thevaultapp' ),
		'desc_tip'    => true,
		'default'     => 'yes',
	),	
	'environment' => array(
		'title'       => __( 'Environment', 'woocommerce-gateway-thevaultapp' ),
		'type'        => 'select',
		'class'       => 'wc-enhanced-select',
		'description' => __( 'This setting specifies whether you will process live transactions, or whether you will process simulated transactions using the TheVaultApp Sandbox.', 'woocommerce-gateway-thevaultapp' ),
		'default'     => 'sandbox',
		'desc_tip'    => true,
		'options'     => array(
			'sandbox' => __( 'Sandbox', 'woocommerce-gateway-thevaultapp' ),
			'live'    => __( 'Live', 'woocommerce-gateway-thevaultapp' ),			
		),
	),
	'title' => array(
		'title'       => __( 'Title', 'woocommerce-gateway-thevaultapp' ),
		'type'        => 'text',
		'description' => __( 'This controls the title which the user sees during checkout.', 'woocommerce-gateway-thevaultapp' ),
		'default'     => __( 'Credit Card (TheVaultApp)', 'woocommerce-gateway-thevaultapp' ),
		'desc_tip'    => true,
	),
	'description' => array(
		'title'       => __( 'Description', 'woocommerce-gateway-thevaultapp' ),
		'type'        => 'text',
		'desc_tip'    => true,
		'description' => __( 'This controls the description which the user sees during checkout.', 'woocommerce-gateway-thevaultapp' ),
		'default'     => __( '<div class="payment-thevaultapp-description"><img class="vaultapp-logo" src="'.WCGatewayThevaultapp()->plugin_url. 'assets/img/logo.png'.'"><span>Simple and Easy! Download the app to pay with your mobile phone.</span></div>', 'woocommerce-gateway-thevaultapp' ),
	),
	'advanced' => array(
		'title'       => __( 'Advanced Settings', 'woocommerce-gateway-thevaultapp' ),
		'type'        => 'title',
		'description' => '',
	),
	'debug' => array(
		'title'       => __( 'Debug', 'woocommerce-gateway-thevaultapp' ),
		'type'        => 'checkbox',
		'label'       => __( 'Enable Logging', 'woocommerce-gateway-thevaultapp' ),
		'default'     => 'no',
		'desc_tip'    => true,
		'description' => __( 'Log TheVaultApp events, such as API response.', 'woocommerce-gateway-thevaultapp' ),
	),

	'vault_enabled' => array(
		'title'       => __( 'Debug Log', 'woocommerce-gateway-thevaultapp' ),
		'type'        => 'checkbox',
		'label'       => __( 'Enable Vault', 'woocommerce-gateway-thevaultapp' ),
		'default'     => 'no',
		'desc_tip'    => true,		
	),

	'accountkeys' => array(
		'title'       => __( 'Account Keys', 'woocommerce-gateway-thevaultapp' ),
		'type'        => 'title',
		'description' => '',
	),	
	
	'store_name' => array(
		'title'       => __( 'Store Name', 'woocommerce-gateway-thevaultapp' ),
		'type'        => 'text',
		'description' => __( 'A label that overrides the store name in the TheVaultApp account on the TheVaultApp hosted checkout pages.', 'woocommerce-gateway-thevaultapp' ),
		'default'     => get_bloginfo( 'name', 'display' ),
		'desc_tip'    => true,
	),	

	'api_url' => array(
		'title'       => __( 'API Url', 'woocommerce-gateway-thevaultapp' ),
		'type'        => 'text',
		'description' => __( 'Get your API Url from VaultApp.', 'woocommerce-gateway-thevaultapp' ),
		'default'     => 'https://staging.thevaultapp.com/api/buildrequest?isAjax=true',
		'desc_tip'    => true,		
	),
	'api_key' => array(
		'title'       => __( 'API Key', 'woocommerce-gateway-thevaultapp' ),
		'type'        => 'text',
		'description' => '',
		'default'     => '',
	),
	/*'callbackurls' => array(
		'title'       => __( 'Callback URLs', 'woocommerce-gateway-thevaultapp' ),
		'type'        => 'title',
		'description' => '',
	),
	'callback_url' => array(
		'title'       => __( 'Verify Callback', 'woocommerce-gateway-thevaultapp' ),
		'type'        => 'text',
		'description' => __( '', 'woocommerce-gateway-thevaultapp' ),
		'default'     => add_query_arg( 'wc-api', 'wc_stripe', trailingslashit( get_home_url() ) ),
		'desc_tip'    => true,
	),*/
	'webhook'     => array(
		'title'       => __( 'Callback URL', 'woocommerce-gateway-thevaultapp' ),
		'type'        => 'title',
		/* translators: webhook URL */
		'description' => sprintf( __( 'You must add the following webhook endpoint <strong style="background-color:#ddd;">&nbsp;%s&nbsp;</strong> to your thevaultapp account settings. This will enable you to receive notifications on the charge statuses.', 'woocommerce-gateway-thevaultapp' ), add_query_arg( 'wc-api', 'wc_gateway_thevaultapp', trailingslashit( get_home_url() ) )),
	),
);

return apply_filters( 'woocommerce_thevaultapp_settings', $settings );

//{namespace name=backend/viison_scd_order_button_unicorn_button}
Ext.define('Shopware.apps.ViisonSCDOrderButtonUnicornButton.Button', {

    extend: 'Ext.button.Button',
    alias: 'widget.viison_scd_order_button_unicorn_button-button',
    margin: 10,
    cls: 'primary',

    /**
     * @override
     */
    initComponent: function() {
        // Add unicorns to the configured text
        this.text = '🦄🦄🦄 ' + (this.text || '') + ' 🦄🦄🦄';

        this.callParent(arguments);
    }

});

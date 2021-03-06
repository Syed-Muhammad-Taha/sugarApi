({
    className: 'tcenter',
    loadData: function (options) {
        //populate your data
        myData=new Object();
        myData.myProperty = "My Value";
        this.myData = myData;
        /*
            //alternatively, you can pass in a JSON array to populate your data
            myData = $.parseJSON( '{"myData":{"myProperty":"My Value"}}' );
            _.extend(this, myData);
        */
        //reset flags on reload
        if (options && _.isFunction(options.complete)) {
            options.complete();
        }
        this.render();
    }
})

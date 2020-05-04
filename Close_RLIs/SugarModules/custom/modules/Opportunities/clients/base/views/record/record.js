({
    extendsFrom: 'OpportunitiesRecordView', 
    zipJSON: {},
    
    initialize: function (options) {
		this._super('initialize', [options]);		
		this.context.on('button:allwon:click', this.allwon, this);
		this.context.on('button:alllost:click', this.alllost, this);
    },
   
    allwon: function(){
		this.allrli('Closed Won','100');
	},
	
    alllost: function(){
		this.allrli('Closed Lost','0');
	},
	
    allrli: function(sales_stage,prob) {
		debugger;
		if(_.isNull(this.model._relatedCollections)){
            return;
        }
		if(_.isEmpty(this.model._relatedCollections.revenuelineitems.models)){
           return;
 		}
		
 		var rlis = this.model._relatedCollections.revenuelineitems.models; // perhaps another method
		var anz = 0;
		for (var i = 0; i < rlis.length; i++) {
		    var stage = rlis[i].get('sales_stage');
			if ((stage != 'Closed Lost') &&
			    (stage != 'Closed Won')) {
				rlis[i].set('sales_stage',sales_stage);
				rlis[i].set('probalility',prob);
				rlis[i].save();
				anz++;
			}
		}
		if (anz>0){
		    app.alert.show('changed-rli', {
    			level: 'success',
    			messages: anz +' RLI(s) set to '+sales_stage,
    			autoClose: true
    		});

		}

		//refresh all supanels
		_.each(this.model._relatedCollections, function(collection){
            collection.fetch({relate: true});
        });
		
		//refresh Opportunity
		this.model.fetch();
		
    }
	

})
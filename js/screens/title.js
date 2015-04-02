game.TitleScreen = me.ScreenObject.extend({
	/**	
	 *  action to perform on state change
	 */
	onResetEvent: function() {	
		me.game.world.addChild(new me.Sprite(0, 0, me.loader.getImage("title-screen")), -10); // TODO
                
                me.input.bindKey(me.input.key.ENTER, "start");
                
                me.game.world.addChild(new (me.renderable.extend({
                    init: function() {
                       this._super(me.Renderable, 'init', [510, 30, me.game.viewport.width, me.game.viewport.height]) ;
                    },
                    
                    draw: function(renderer){
                        
                    }
                })));
	},
	
	
	/**	
	 *  action to perform when leaving this screen (state change)
	 */
	onDestroyEvent: function() {
		; // TODO
	}
});

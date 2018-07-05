( function( api ) {

	// Extends our custom "deft" section.
	api.sectionConstructor['deft'] = api.Section.extend( {

		// No events for this type of section.
		attachEvents: function () {},

		// Always make the section active.
		isContextuallyActive: function () {
			return true;
		}
	} );

} )( wp.customize );

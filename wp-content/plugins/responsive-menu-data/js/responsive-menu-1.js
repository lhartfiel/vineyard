var $RMjQuery = jQuery.noConflict();$RMjQuery( document ).ready( function(){$RMjQuery( document ).on( 'click tap', function( e ){if( !$RMjQuery( e.target ).closest( '#responsive-menu, #click-menu' ).length ){closeRM()}});var isOpen = false;$RMjQuery( document ).on( 'click', '#click-menu', function(){$RMjQuery( '#responsive-menu' ).css( 'height', $RMjQuery( document ).height() );!isOpen ? openRM() : closeRM()});function openRM(){$RMjQuery( 'body' ).addClass( 'RMPushOpen' );$RMjQuery( '#responsive-menu' ).css( 'display', 'block' );$RMjQuery( '#responsive-menu' ).addClass( 'RMOpened' );$RMjQuery( '#click-menu' ).addClass( 'click-menu-active' );$RMjQuery( '#responsive-menu' ).stop().animate({right: "0"}, 750, 'linear', function(){$RMjQuery( '#responsive-menu' ).css( 'height', $RMjQuery( document ).height() );isOpen = true})}function closeRM(){$RMjQuery( '#responsive-menu' ).animate({right: "-40%"}, 750, 'linear', function(){$RMjQuery( 'body' ).removeClass( 'RMPushOpen' );$RMjQuery( '#responsive-menu' ).css( 'display', 'none' );$RMjQuery( '#responsive-menu' ).removeClass( 'RMOpened' );$RMjQuery( '#click-menu' ).removeClass( 'click-menu-active' );isOpen = false})}$RMjQuery( window ).resize( function(){$RMjQuery( '#responsive-menu' ).css( 'height', $RMjQuery( document ).height() );if( $RMjQuery( window ).width() > 580 ){if( $RMjQuery( '#responsive-menu' ).css( 'right' ) != '-40%' ){closeRM()}}});$RMjQuery( '#responsive-menu ul ul' ).css( 'display', 'none' );clickLink = '<span class=\"appendLink\">▼</span>';clickedLink = '<span class=\"appendLink\">▼</span>';excludeList = '.current-menu-item, .current-menu-ancestor, .current_page_ancestor';$RMjQuery( '#responsive-menu .menu-item-has-children' ).not( excludeList ).prepend( clickLink );$RMjQuery( '#responsive-menu .page_item_has_children.current-menu-item' ).prepend( clickedLink );$RMjQuery( '#responsive-menu .page_item_has_children.current-menu-ancestor' ).prepend( clickedLink );$RMjQuery( '#responsive-menu .menu-item-has-children.current-menu-item' ).prepend( clickedLink );$RMjQuery( '#responsive-menu .menu-item-has-children.current-menu-ancestor').prepend( clickedLink );$RMjQuery( '#responsive-menu .page_item_has_children' ).not( excludeList ).prepend( clickLink );$RMjQuery( '#responsive-menu .menu-item-has-children.current_page_ancestor' ).prepend( clickedLink );$RMjQuery( '#responsive-menu .page_item_has_children.current_page_ancestor' ).prepend( clickedLink );$RMjQuery( '.appendLink' ).on( 'click', function(){$RMjQuery( this ).nextAll( '#responsive-menu ul ul' ).slideToggle();$RMjQuery( this ).html( $RMjQuery( this ).hasClass( 'rm-append-active' ) ? '▼' : '▲' );$RMjQuery( this ).toggleClass( 'rm-append-active' );$RMjQuery( '#responsive-menu' ).css( 'height', $RMjQuery( document ).height() )});$RMjQuery( '.rm-click-disabled' ).on( 'click', function(){$RMjQuery( this ).nextAll( '#responsive-menu ul ul' ).slideToggle();$RMjQuery( this ).siblings( '.appendLink' ).html( $RMjQuery( this ).hasClass( 'rm-append-active' ) ? '▼' : '▲' );$RMjQuery( this ).toggleClass( 'rm-append-active' );$RMjQuery( '#responsive-menu' ).css( 'height', $RMjQuery( document ).height() )})});
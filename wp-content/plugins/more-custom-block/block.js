( function( blocks, editor, i18n, element ) {
    var el = element.createElement;
    var RichText = editor.RichText;

    blocks.registerBlockType( 'more-custom-block/more', {
        
        title: i18n.__( 'More', 'more-custom-block' ),
        icon: 'smiley',
        category: 'layout',
        edit: function( props ) {
            var content = props.attributes.content;
            function onChangeContent( newContent ) {
                props.setAttributes( { content: newContent } );
            }
            return el(
                RichText,
                {
                    tagName: 'p',
                    className: props.className,
                    onChange: onChangeContent,
                    value: content,
                }
            );
        },
        save: function( props ) {
            return el( RichText.Content, {
                tagName: 'p', 
                value: props.attributes.content,
            } );
        },
    } );
} )(
    window.wp.blocks,
    window.wp.editor,
    window.wp.i18n,
    window.wp.element
);

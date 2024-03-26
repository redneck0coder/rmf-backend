
import ClassicEditor from '@ckeditor/ckeditor5-build-classic';
if(document.querySelector( '#editor' )) {
	ClassicEditor
	.create( document.querySelector( '#editor' ) )
	.catch( error => {
			console.error( error );
	} );
}

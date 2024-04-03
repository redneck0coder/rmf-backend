import Quill from 'quill';
const toolbarOptions = [
  
	[{ 'size': ['small', false, 'large', 'huge'] }],  // custom dropdown
  [{ 'header': [1, 2, 3, 4, 5, 6, false] }],
  [{ 'font': [] }],
	['bold', 'italic', 'underline', 'strike'],        // toggled buttons
  ['code-block'],
  ['link'],

  [{ 'list': 'ordered'}, { 'list': 'bullet' }, { 'list': 'check' }],


  [{ 'color': [] }, { 'background': [] }],          // dropdown with defaults from theme
  [{ 'align': [] }],

];

const quill = new Quill('#editor', {
  modules: {
	syntax: true, 
	toolbar: toolbarOptions
  },
  theme: 'snow'
});

const desc =  document.getElementById('desc');

function handler() {
	desc.value = quill.getSemanticHTML(0, 10000000);
}

quill.on('text-change', handler);


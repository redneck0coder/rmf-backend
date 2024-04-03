<x-form-select name="topic_id" :options="$topicsList" />
<x-form-input name="title" class="rounded w-full" placeholder="Заголовок"/>
<x-form-input name="alias" class="rounded w-full" placeholder="Url"/>
<x-form-textarea name="body" class="hidden" id="desc" placeholder="Статья"/>
<div class="quill">
	<div id="toolbar"></div>
	<div class="bg-white" id="editor" name="desc"></div>
</div>
<div class="my-4">
	<input type="file" name="url">
</div>
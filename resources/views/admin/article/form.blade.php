<x-form-select name="topic_id" :options="$topicsList" />
<x-form-input name="title" class="rounded w-full" placeholder="Заголовок"/>
<x-form-input name="alias" class="rounded w-full" placeholder="Url"/>
<x-form-textarea name="body" class="rounded w-full" placeholder="Статья"/>
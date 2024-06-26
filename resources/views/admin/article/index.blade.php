<x-layout.admin :topics="$topics">
	<section class="py-4 px-2 w-full main-container">
		<div class="p-4 rounded-xl bg-white w-full h-full max-h-full overflow-auto">
			<h2 class="text-2xl my-4">Статьи сайта: </h2>
			<div class="my-4">
				<a  href="{{ route('articles.create') }}">Добавить статью</a>
			</div>
			<div class="relative overflow-x-auto shadow-md sm:rounded-lg">
			<table class="table-auto w-full text-sm text-left border">
				<thead class="text-xs text-gray-700 uppercase bg-gray-50">
					<tr class="text-center">
						<th class="px-6 py-3">id</th>
						<th class="px-6 py-3">Картинка</th>
						<th class="px-6 py-3">alias</th>
						<th class="px-6 py-3">topic_id</th>
						<th class="px-6 py-3">Наименование</th>
						<th class="px-6 py-3">Дейсвтия</th>
					</tr>
				</thead>
				<tbody>
					@foreach($articles as $article)
					<tr class="odd:bg-white  even:bg-gray-50 text-center">
						<td class="px-6 py-4">{{ $article->id }}</td>
						<td class="px-6 py-4">
						@if($article->image)
							<img width="50" src="/images/{{ $article->image->url }}" alt="">
						@endif	
						</td>
						<td class="px-6 py-4">{{ $article->alias }}</td>
						<td class="px-6 py-4">{{ $article->topic_id }}</td>
						<td class="px-6 py-4">{{ $article->title }}</td>
						<td>
							<div class="flex justify-center">
								<a href="{{ route('articles.edit', $article->id) }}">
									<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
										<path stroke-linecap="round" stroke-linejoin="round" d="m16.862 4.487 1.687-1.688a1.875 1.875 0 1 1 2.652 2.652L6.832 19.82a4.5 4.5 0 0 1-1.897 1.13l-2.685.8.8-2.685a4.5 4.5 0 0 1 1.13-1.897L16.863 4.487Zm0 0L19.5 7.125" />
									</svg>
								</a>

								<x-form :action="route('articles.destroy', $article->id)" method="post">
									@method('DELETE')
									<button type="submit">
										<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
											<path stroke-linecap="round" stroke-linejoin="round" d="m14.74 9-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 0 1-2.244 2.077H8.084a2.25 2.25 0 0 1-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 0 0-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 0 1 3.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 0 0-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 0 0-7.5 0" />
										</svg>
									</button>
								</x-form>
							</div>
						</td>
					</tr>
					@endforeach

				</tbody>
			</table>
		</div>
	</div>
	</section>
</x-layout.public>
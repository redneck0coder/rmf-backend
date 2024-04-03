<x-layout.public :topics="$topics">
	<div class="flex flex-col justify-center items-center main-container">
		<div class="p-24 border rounded-2xl text-center">
			<h1 class="text-white text-2xl">Админ панель</h1>
			<x-form class="flex flex-col justify-center items-center" 
							:action="route('login.store')">
				<x-form-input name="email" class="rounded"/>
				<x-form-input name="password" type="password" class="rounded" />
				<button class="rounded bg-white px-8 py-2 mt-4" type="submit">Войти</button>
			</x-form>
		</div>
	</div>
</x-layout.public>
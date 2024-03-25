<x-layout.public :topics="$topics">
	<div class="flex justify-center items-center">
		<x-form class="flex flex-col justify-center items-center" 
					  :action="route('login.store')">
			<x-form-input name="email" class="rounded"/>
			<x-form-input name="password" type="password" class="rounded" />
			<button class="rounded bg-blue-400 text-white px-4 py-2 mt-4" type="submit">Войти</button>
		</x-form>
	</div>
</x-layout.public>
<x-app-layout>
    <div class="bg-cover bg-center h-full bg-base-200">
        <div class="px-4 py-16 sm:px-6 lg:px-8 h-full">
            <div class="max-w-lg mx-auto bg-base-100 p-4 rounded-lg">
                <div class="flex flex-row">
                    <img src="/Icon.svg" class="mr-3 h-8" alt="AnyApp Logo" />
                    <h1 class="text-3xl font-bold text-center flex-1 pr-9">Se connecter</h1>
                </div>
                <p class="max-w-md mx-auto mt-4 text-center pb-10 p-4">
                    Connectez-vous pour accéder aux différentes fonctionnalités de cette application
                </p>
                <form action="#" class=" flex flex-col space-y-6">
                    <Label>
                        <span>Email</span>
                        <input class=" input-md h-11 input input-bordered w-full pb-1" autocomplete="username"
                            bind:value={loginValues.email} on:keypress={(e)=> {
                        if (e.key == 'Enter') {
                        e.preventDefault();
                        submitHandler;
                        }
                        }}
                        placeholder="prenom.nom@eiffage.com"
                        type="email"
                        />
                        <Error bind:errors field={'email'} />
                    </Label>

                    <Label>
                        <span>Votre mot de passe</span>
                        <input class=" input-md h-11 input input-bordered w-full pb-1" autocomplete="current-password"
                            bind:value={loginValues.password} on:keypress={(e)=> {
                        if (e.key == 'Enter') {
                        e.preventDefault();
                        submitHandler();
                        }
                        }}
                        placeholder="*********"
                        type="password"
                        />
                        <Error bind:errors field={'password'} />
                    </Label>

                    <button class="btn btn-primary" color="red" on:click={()=> submitHandler()}>
                        {#if waitFunction}
      <span class="loading loading-spinner" />
      Chargement ...
     {:else}
      Connexion
     {/if}
    </button>
   </form>
  </div>
 </div>
</div>
</x-app-layout>

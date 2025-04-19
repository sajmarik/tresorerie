<x-master title="Mon Profile"> <h3>Profiles</h3>

    <div class="row my-5">

   @foreach ($profiles as $profile )
        <x-profile-card :profile="$profile"/>
   @endforeach

    </div>
{{ $profiles->links() }}

</x-master>





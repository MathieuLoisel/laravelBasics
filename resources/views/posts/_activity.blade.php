<div class="container">
    <div class="row">
        <x-card
            title="Most Commented"
            subtitle="What people are currently talking about ?"
            :items="$mostCommented"
            pluckContent="title"
        >
        </x-card>
    </div>

    <div class="row mt-4">
        <x-card
            title="Most Active"
            subtitle="Users with most posts written !"
            :items="$mostActive"
            pluckContent="name"
        >
        </x-card>
    </div>

    <div class="row mt-4">
        <x-card
            title="Most Active Last Month"
            subtitle="Users with most posts written int he last month !"
            :items="$mostActiveLastMonth"
            pluckContent="name"
        >
        </x-card>
    </div>
</div>

@extends('page::page-layouts.main-page')

@section('title', "User Bios")

@section('content')
    <div class="container">
        <div class="row">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab, harum incidunt inventore officiis porro
                repellendus sint sunt vel. Aut autem eum harum illum labore, minima neque pariatur ut voluptate
                voluptates?</p>
            <p>Ab accusamus adipisci architecto cum eius eligendi eum fugit hic magni maiores minima minus mollitia
                natus, neque obcaecati, officia possimus quaerat quia quibusdam quo ratione sed sit temporibus veniam
                voluptas.</p>
            <p>Accusamus adipisci asperiores atque blanditiis culpa deleniti doloremque dolores eaque eveniet fuga harum
                inventore nihil nulla numquam optio placeat possimus qui quia quis quo quos, soluta suscipit unde
                voluptates voluptatibus?</p>
            {{ dump($bio) }}
        </div>
    </div>
@endsection

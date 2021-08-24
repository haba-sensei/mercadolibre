@extends('../layouts/admin/' . $layout)

@include('../components/admin/nav-title')

@section('subcontent')
@if(session('info'))

<input id="infomensaje" type="hidden" value="{{ session('info') }}" >
<input id="colormensaje" type="hidden" value="{{ session('color') }}" >

@endif

<center>
    <button id="btn-nft-enable" onclick="initFirebaseMessagingRegistration()" class="btn btn-danger btn-xs btn-flat">Allow for Notification</button>
</center>

<form action="{{ route('admin.send_notification') }}" method="POST">
    @csrf
    <div class="form-group">
        <label>Title</label>
        <input type="text" class="form-control" name="title">
    </div>
    <div class="form-group">
        <label>Body</label>
        <textarea class="form-control" name="body"></textarea>
      </div>
    <button type="submit" class="btn btn-primary">Send Notification</button>
</form>

@endsection

@section('script')

<script>


var firebaseConfig = {
    apiKey: "AIzaSyCmF3I02OcesAK2dCmI01HS13FjU2QJQB0",
    authDomain: "abogadosfcm.firebaseapp.com",
    databaseURL: "https://abogadosfcm-default-rtdb.firebaseio.com",
    projectId: "abogadosfcm",
    storageBucket: "abogadosfcm.appspot.com",
    messagingSenderId: "891936953167",
    appId: "1:891936953167:web:39beeac3ae23e5942d2b3a",
    measurementId: "G-R6WYB6DZMY"
};
// Initialize Firebase
firebase.initializeApp(firebaseConfig);
    const messaging = firebase.messaging();
    function initFirebaseMessagingRegistration() {
            messaging
            .requestPermission()
            .then(function () {
                return messaging.getToken()
            })
            .then(function(token) {
                alert(token);
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });
                $.ajax({
                    url: '{{ route("admin.save_token") }}',
                    type: 'POST',
                    data: {
                        token: token
                    },
                    dataType: 'JSON',
                    success: function (response) {
                        alert(response);
                    },
                    error: function (err) {
                        console.log('User Chat Token Error'+ err);
                    },
                });
            }).catch(function (err) {
                console.log('User Chat Token Error'+ err);
            });
     }
    messaging.onMessage(function(payload) {
        const noteTitle = payload.notification.title;
        const noteOptions = {
            body: payload.notification.body,
            icon: payload.notification.icon,
        };
        new Notification(noteTitle, noteOptions);
    });


</script>

@endsection


<html>
    <head>
    </head>
    <body>
        <form method="POST" action="{{ route ('webHookCreation') }}" >
            {{ csrf_field() }}
        <button type="submit">Register WebHook</button>
        </form>
        </form>
    </body>
</html>
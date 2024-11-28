<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Requests</title>
    <style>
        @include('style')
        table {
            border-collapse: collapse;
            width: 80%;
            align-items: center;
            margin: 0 auto;
        }

        th,
        td {
            border: 3px solid black;
            padding: 8px;
            text-align: left;
            color: #fff;
            text-align: center;
        }

        th {
            font-size: 1.2rem;
            font-weight: bold;
            padding: 0px;
        }
    </style>
</head>

<body>
    @include('navbar')
    <main class="bg-customBg w-full min-h-screen flex flex-col md:flex-row pt-16 md:pt-14 md:px-4">
        <!-- @yield('content') -->
        <table>
            <tr>
                <th>Project Name</th>
                <th>Request From</th>
                <th>Assigned To</th>
                <th>Deadline</th>
                <th>Action</th>
            </tr>
            @foreach ($requests as $request)
                <tr>
                    <td>{{ $request->name ?? 'N/A' }}</td>
                    <td>{{ $request->username ?? 'N/A' }}</td>
                    <td>{{ $request->assigned_to ?? 'N/A' }}</td>
                    <td>{{ $request->deadline ?? 'N/A' }}</td>
                    
                    <td>
                    @if (Auth::user()->role === 'admin' || Auth::user()->id === $request->assigned_to)
                        <form id="accept-form-{{ $request->id }}" data-request-id="{{ $request->id }}"
                            data-request-by-id="{{ $request->requestBy_id }}" data-project-id="{{ $request->project_id }}">
                            @csrf
                            <button
                                style="background-color: #121063; text-align: center; color: #fff; padding: 0.5rem 1rem; border-radius: 1.5rem; border: none; cursor: pointer;"
                                type="submit">Accept</button>
                        </form>
                    @endif
                    </td>
                </tr>
            @endforeach
        </table>



    </main>
    <script>
document.querySelectorAll('form[id^="accept-form-"]').forEach((form) => {
    form.addEventListener('submit', async function (event) {
        event.preventDefault(); // Prevent form's default submission

        try {
            // Get data attributes
            const projectId = form.dataset.projectId;
            const requestId = form.dataset.requestId;
            const requestById = form.dataset.requestById;

            // Send a POST request using Fetch API
            const response = await fetch('http://127.0.0.1:8000/api/accept', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
                },
                body: JSON.stringify({
                    project_id: projectId,
                    request_id: requestId,
                    requestBy_id: requestById,
                }),
            });

            const data = await response.json();

            if (data.status) {
                alert('Request accepted successfully');
                window.location = data.redirect_url; // Redirect if successful
            } else {
                alert('Failed to accept request: ' + JSON.stringify(data.message));
            }
        } catch (error) {
            console.error('Error:', error);
            alert('An error occurred while accepting the request.');
        }
    });
});

</script>

</body>

</html>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Team Available</title>
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <style>
    /* General Styles */
    body,
    h1,
    h2,
    p,
    div,
    span {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    body {
      font-family: Arial, sans-serif;
      background-color: #121063;
      color: #ffffff;
      height: 100vh;
    }

    .container {
      width: 90%;
      max-width: 1200px;
      margin: auto;
      height: 100%;
      padding: 2rem 0;
    }

    /* Header */
    .header {
      display: flex;
      justify-content: space-between;
      align-items: center;
      margin-bottom: 2rem;
    }

    .header-title {
      background: white;
      color: #121063;
      font-size: 1.5rem;
      padding: 0.5rem 1.5rem;
      border-radius: 1.5rem;
    }

    .language-button {
      background: white;
      color: #121063;
      font-size: 1rem;
      padding: 0.5rem 1rem;
      border-radius: 1.5rem;
      border: none;
      cursor: pointer;
    }

    /* Cards Section */
    .cards {
      display: flex;
      flex-wrap: wrap;
      
      gap: 1.5rem;
    }

    .card {
      flex: 1 1 calc(33.33% - 1rem);
      max-width: calc(33.33% - 1rem);
  
      background: #ffffff;
      color: #121063;
      border-radius: 1.5rem;
      text-align: center;
      padding: 3rem 1rem;
      box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
      margin-top: 4%;
    }

    .card:hover {
      transform: translateY(-5px);
      box-shadow: 0 8px 12px rgba(0, 0, 0, 0.2);
    }

    .card-avatar {
      background: #121063;
      color: white;
      font-size: 1.5rem;
      width: 60px;
      height: 60px;
      border-radius: 50%;
      display: flex;
      justify-content: center;
      align-items: center;
      margin: 0 auto 1rem;
    }

    .card-title {
      font-size: 1.2rem;
      font-weight: bold;
      margin-bottom: 0.5rem;
    }

    .card-info {
      display: flex;
      justify-content: space-between;
      margin-bottom: 1rem;
      font-size: 0.9rem;
      color: #666;
      column-gap: 5px;
    }

    .info-item {
      display: flex;
      flex-direction: column;
      align-items: center;
      row-gap: 8px;
    }

    .status {
      font-size: 0.9rem;
      margin-bottom: 1rem;
    }

    .rating {
      font-size: 1.2rem;
      color: #ffcd3c;
    }

    @include('style')
  </style>
</head>

<body>
  @include  ('navbar')

  <div class="container">

    <!-- Header -->
    <header class="header">
      <h1 class="header-title">Team Available</h1>
      <button class="language-button">Language Eng</button>
    </header>

    <!-- Cards Section -->
    <section class="cards">
      @if ($teams->isEmpty())
      <div class="card"></div>
      <p>No teams available.</p>
    @else
        @foreach ($teams as $member)
        <div class="card">
        <div class="card-avatar">DP</div>
        <h2 class="card-title">{{ $member->username }}</h2>
        <div class="card-info">
          <div class="info-item">
          <b>Project Status</b>
          <span>{{ $member->status }}</span>
          </div>
          <div class="info-item">
          <b>Deadline</b>
          <span class="deadline">{{ $member->deadline }}</span>
          </div>
          <div class="info-item">
          <b>Pending Days</b>
          <span class="pending-days"></span>
          </div>
        </div>
        @if ($member->status == 'open')
      <button
        style=" background-color: #121063; text-align: center; color: #fff; padding: 0.5rem 1rem; border-radius: 1.5rem; border: none; cursor: pointer;"
        class="request-btn" data-member-id="{{ $member->id }}">Request</button>
      <p style="display: none;" class="givenBy">{{$member->assigned_to}}</p>
      <a href="">Requests</a>
      </div>




    @elseif (Auth::user()->id == $member->assigned_to || Auth::user()->role == 'admin')

    <div style="display: flex;  align-items: center;">
    <select style="margin-left: 50px;" class="status" name="status" id="status-{{ $member->id }}">
      <option value="{{ $member->status }}" selected disabled>{{ $member->status }} </option>
      <option value="pending">Pending</option>
      <option value="in-progress">In-progress</option>
      <option value="completed">Completed</option>
      <option value="open">Open</option>
    </select>
    <button
      style=" background-color: #121063; text-align: center; color: #fff; padding: 0.5rem 1rem; border-radius: 1.5rem; border: none; cursor: pointer;"
      class="update-btn" data-member-id="{{ $member->id }}">Update</button>
    </div>
  @else
  <p class="status">{{ $member->status }}</p>
@endif
        <!-- <div class="rating">
        <span>★</span>
        <span>★</span>
        <span>★</span>
        <span>★</span>
        <span>☆</span>
        </div> -->
        </div>
      @endforeach
    @endif

  </section>
  </div>

  <script>
    document.addEventListener('DOMContentLoaded', () => {
      console.log("Script is running...");

      // Loop through each .card and calculate pending days
      document.querySelectorAll('.card').forEach(card => {
        const deadlineElement = card.querySelector('.deadline');
        const pendingDaysElement = card.querySelector('.pending-days');

        if (deadlineElement && pendingDaysElement) {
          const deadline = new Date(deadlineElement.textContent.trim());
          const today = new Date();

          if (!isNaN(deadline.getTime())) {
            const diffTime = deadline - today;
            const pendingDays = diffTime > 0 ? Math.ceil(diffTime / (1000 * 60 * 60 * 24)) : 0;
            const pendingText = pendingDays > 0 ? `${pendingDays} days remaining` : `Deadline passed`;

            pendingDaysElement.textContent = pendingText;
            console.log(`Updated pending-days: ${pendingText}`);
          } else {
            console.error(`Invalid date format in deadline: "${deadlineElement.textContent}"`);
          }
        } else {
          console.error(".deadline or .pending-days element not found within .card.");
        }
      });
    });
    document.querySelectorAll('.request-btn').forEach(button => {
    button.addEventListener('click', function () {
        const memberId = this.getAttribute('data-member-id');
        const givenBy = this.parentElement.querySelector('.givenBy').textContent;

        fetch('http://127.0.0.1:8000/api/request', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
                'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
            },
            body: JSON.stringify({
                project_id: memberId,
                givenBy_id: givenBy, // Updated key name
            }),
        })
        .then(response => response.json())
        .then(data => {
            if (data.status) {
                alert('Request sent successfully');
            } else {
                alert('Failed to send request: ' + JSON.stringify(data.errors));
            }
        })
        .catch(error => {
            console.error('Error:', error);
            alert('An error occurred while sending the request');
        });
    });
});

      document.querySelectorAll('.update-btn').forEach(button => {
        button.addEventListener('click', function () {
          // Get the member ID
          const memberId = this.getAttribute('data-member-id');
          // Get the selected status
          const status = document.querySelector(`#status-${memberId}`).value;

          // Make the API call to update the status
          fetch('http://127.0.0.1:8000/api/update-status', {
            method: 'POST',
            headers: {
              'Content-Type': 'application/json',
              'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
            },
            body: JSON.stringify({
              member_id: memberId,
              status: status,
            }),
          })
            .then(response => response.json())
            .then(data => {
              if (data.status) {
                alert('Status updated successfully');
              } else {
                alert('Failed to update status');
              }
            })
            .catch(error => {
              console.error('Error:', error);
              alert('An error occurred while updating the status');
            });
        });
      });
      if (value) {
        window.location.href = value; // Redirect to the selected page
      }
  </script>
</body>

</html>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1" />
  <title>Biography Project</title>
  <link href="{{ asset('css/style.css') }}" rel="stylesheet">
</head>
<body>
  <main class="landing">
    <h1>Biography Collection</h1>
    <p>Discover the lives and stories of four inspiring people.</p>

    <div class="table-wrapper">
      <table class="bio-table" role="table" aria-label="Biography list">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Person</th>
            <th scope="col">Biography</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td class="num">1</td>
            <td class="name">Person 1</td>
            <td class="action"><a class="view-link" href="{{ url('/bio1') }}">View Biography</a></td>
          </tr>
          <tr>
            <td class="num">2</td>
            <td class="name">Person 2</td>
            <td class="action"><a class="view-link" href="{{ url('/bio2') }}">View Biography</a></td>
          </tr>
          <tr>
            <td class="num">3</td>
            <td class="name">Person 3</td>
            <td class="action"><a class="view-link" href="{{ url('/bio3') }}">View Biography</a></td>
          </tr>
          <tr>
            <td class="num">4</td>
            <td class="name">Person 4</td>
            <td class="action"><a class="view-link" href="{{ url('/bio4') }}">View Biography</a></td>
          </tr>
        </tbody>
      </table>
    </div>
  </main>
</body>
</html>

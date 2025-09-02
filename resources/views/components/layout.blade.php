<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'Biographies' }}</title>

    <style>
        * { margin: 0; padding: 0; box-sizing: border-box; }
        html, body { height: 100%; }

        body {
          font-family: "Poppins", "Comic Sans MS", cursive, sans-serif;
          background: linear-gradient(135deg, #ffdde1, #ee9ca7, #a1c4fd, #c2e9fb);
          background-size: 400% 400%;
          animation: gradientFlow 12s ease infinite;
          color: #444;
          line-height: 1.6;
        }

        @keyframes gradientFlow {
          0% { background-position: 0% 50%; }
          50% { background-position: 100% 50%; }
          100% { background-position: 0% 50%; }
        }

        .landing {
          max-width: 1000px;
          margin: 50px auto;
          padding: 40px;
          background: rgba(255, 255, 255, 0.75);
          border-radius: 25px;
          box-shadow: 0 10px 25px rgba(0,0,0,0.1);
          backdrop-filter: blur(10px);
          animation: popIn 1s ease;
          text-align: center;
        }

        .landing h1 {
          font-size: 2.5rem;
          font-weight: 700;
          color: #ff6fa5;
          margin-bottom: 30px;
          letter-spacing: 1px;
        }

        /* --- Table Styling --- */
        .bio-table {
          width: 100%;
          border-collapse: separate;
          border-spacing: 0 12px;
        }

        .bio-table th, .bio-table td {
          padding: 18px 20px;
          font-size: 1rem;
          text-align: center;
        }

        .bio-table th {
          background: #ffe0ec;
          color: #ff4f81;
          font-weight: bold;
          font-size: 1.05rem;
          text-transform: uppercase;
          border-radius: 10px;
        }

        .bio-table tbody tr {
          background: #fff;
          border-radius: 15px;
          box-shadow: 0 5px 12px rgba(0,0,0,0.08);
          transition: transform 0.2s ease, box-shadow 0.2s ease;
        }

        .bio-table tbody tr:hover {
          transform: scale(1.02);
          box-shadow: 0 8px 16px rgba(0,0,0,0.15);
          background: #fff7fa;
        }

        .bio-table .num {
          font-weight: bold;
          color: #ff4f81;
          font-size: 1.1rem;
        }

        /* --- Button Styling --- */
        .btn {
          display: inline-block;
          padding: 10px 22px;
          background: linear-gradient(135deg, #4a90e2, #357ab8);
          color: #fff;
          text-decoration: none;
          border-radius: 25px;
          font-size: 0.95rem;
          font-weight: 600;
          transition: all 0.3s ease;
        }

        .btn:hover {
          background: linear-gradient(135deg, #357ab8, #245a8d);
          transform: scale(1.08);
          box-shadow: 0 5px 12px rgba(53, 122, 184, 0.4);
        }

        .back-btn {
          display: inline-block;
          padding: 12px 25px;
          margin-top: 20px;
          background: linear-gradient(135deg, #a1c4fd, #c2e9fb);
          color: #555;
          border-radius: 25px;
          text-decoration: none;
          font-weight: bold;
          font-size: 1rem;
          transition: all 0.3s ease;
        }

        .back-btn:hover {
          background: linear-gradient(135deg, #89f7fe, #66a6ff);
          color: #fff;
          transform: scale(1.05);
          box-shadow: 0 8px 18px rgba(102, 166, 255, 0.4);
        }

        @keyframes popIn {
          from { opacity: 0; transform: scale(0.9); }
          to { opacity: 1; transform: scale(1); }
        }
    </style>
</head>
<body>
    <main>
        <div class="landing">
            <h1>{{ $title ?? 'Biographies' }}</h1>
            {{ $slot }}
        </div>
    </main>
</body>
</html>

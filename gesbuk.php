<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Guestbook</title>
  <style>

    body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
      background-color: #f4f4f4;
    }

    .container {
      max-width: 960px;
      margin: 20px auto;
      padding: 20px;
      background-color: #fff;
      box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
    }

    .form-group {
      margin-bottom: 10px;
    }

    .form-group label {
      display: block;
      font-weight: bold;
    }

    .form-group input,
    .form-group textarea {
      width: 100%;
      padding: 8px;
      border: 1px solid #ccc;
      border-radius: 5px;
      box-sizing: border-box;
    }

    .form-group textarea {
      resize: vertical;
    }

    .btn {
      padding: 10px 20px;
      background-color: #333;
      color: #fff;
      text-decoration: none;
      border-radius: 5px;
      transition: background-color 0.3s ease;
    }

    .btn:hover {
      background-color: #555;
    }

    .guestbook-entry {
      margin-bottom: 20px;
      padding: 10px;
      border: 1px solid #ccc;
      border-radius: 5px;
    }

    .guestbook-entry h3 {
      margin-top: 0;
    }

    .guestbook-entry p {
      margin-bottom: 5px;
    }

    .guestbook-entry .timestamp {
      color: #888;
      font-size: 0.8em;
    }
  </style>
</head>

<body>
  <div class="container">
    <h1>Guestbook</h1>
    <form id="guestbookForm">
      <div class="form-group">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required>
      </div>
      <div class="form-group">
        <label for="message">Message:</label>
        <textarea id="message" name="message" rows="4" required></textarea>
      </div>
      <button type="submit" class="btn">Submit</button>
    </form>

    <div id="guestbookEntries">
     
    </div>
  </div>

  <script>
   
    const guestbookForm = document.getElementById('guestbookForm');
    const guestbookEntries = document.getElementById('guestbookEntries');

    guestbookForm.addEventListener('submit', function (event) {
      event.preventDefault();

      const nameInput = document.getElementById('name');
      const messageInput = document.getElementById('message');

      const name = nameInput.value.trim();
      const message = messageInput.value.trim();

      if (name !== '' && message !== '') {
        const timestamp = new Date().toLocaleString();
        const entryHTML = `
          <div class="guestbook-entry">
            <h3>${name}</h3>
            <p>${message}</p>
            <p class="timestamp">${timestamp}</p>
          </div>
        `;

        guestbookEntries.insertAdjacentHTML('beforeend', entryHTML);

        nameInput.value = '';
        messageInput.value = '';
      } else {
        alert('Please enter your name and message.');
      }
    });
  </script>
</body>

</html>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trip Booking Form</title>
    <!-- <link rel="stylesheet" href="booking2.css"> -->
    <style>
        body {
            background-color: orange;
        }

        .container {
            max-width: 700px;
            margin: 0 auto;
            margin-top: 100px;
            padding: 20px;
            background-color: #fff;
        }

        form {
            display: flex;
            flex-direction: column;
        }

        label {
            margin-bottom: 5px;
        }

        input,
        select,
        button {
            margin-bottom: 10px;
            padding: 8px;
            font-size: 16px;
        }

        button {
            background-color: orange;
            color: white;
            border: none;
            cursor: pointer;
        }

        button:hover {
            background-color: orangered;
        }

        #memberInfoContainer {
            margin-bottom: 10px;
        }

        .close-btn {
            position: absolute;
            top: 98px;
            right: 400px;
            margin-right: 2px;
            font-size: 20px;
            text-decoration: none;
            color: #000;
        }
    </style>
</head>

<body>
    <a href="./index.php" class="close-btn">&#10006;</a>
    <div class="container">
        
        <h2>Book Your Tour Now</h2>
        <form id="tripForm">
            <label for="startPoint">Start Point:</label>
            <input type="text" id="startPoint" name="startPoint" required>

            <label for="endPoint">End Point:</label>
            <br><select id="endPoint" name="endPoint" placeholder="Select">
                <option value="select">Select</option>
                <option value="bali">Bali</option>
                <option value="shimla">Shimla</option>
                <option value="Manali">Manali</option>
                <option value="agra">Agra</option>
                <option value="masoorie">Masoorie</option>
                <option value="kerla">Kerla</option>
                <option value="rishikesh">Rishikesh</option>
                <option value="jammu 7 kasmir">Jammu & Kashmir</option>
                <option value="shrinagar">Shrinagar</option>
                <option value="andman">Andman</option>
                <option value="gao">Goa</option>
            </select>
            <label for="numberOfMembers">Number of Members:</label>
            <input type="number" id="numberOfMembers" name="numberOfMembers" min="1" required>

            <div id="memberInfoContainer"></div>

            <label for="startDate">Start Date:</label>
            <input type="date" id="startDate" name="startDate" min="2024-03-22" max="2025-05-30" onfocus="this.min=new Date().toISOString().split('T')[0]" required>

            <label for="endDate">End Date:</label>
            <input type="date" id="endDate" name="endDate" min="2024-03-22" max="2025-05-30" onfocus="this.min=new Date().toISOString().split('T')[0]" required>

            <button type="submit">Book Now</button>
        </form>
    </div>

    <script>
        document.getElementById('numberOfMembers').addEventListener('change', function () {
            const numberOfMembers = parseInt(this.value);
            const memberInfoContainer = document.getElementById('memberInfoContainer');
            memberInfoContainer.innerHTML = '';

            for (let i = 0; i < numberOfMembers; i++) {
                const memberDiv = document.createElement('div');
                memberDiv.classList.add('member-info');
                memberDiv.innerHTML = `
        <h3>Member ${i + 1}</h3>
        <label for="memberName${i}">Name:</label>
        <input type="text" id="memberName${i}" name="memberName${i}" required>
  
        <label for="memberAge${i}">Age:</label>
        <input type="number" id="memberAge${i}" name="memberAge${i}" required>
      `;
                memberInfoContainer.appendChild(memberDiv);
            }
        });

        document.getElementById('tripForm').addEventListener('submit', function (event) {
            event.preventDefault();
            // Handle form submission logic here
            console.log('Form submitted');
        });

    </script>
</body>

</html>
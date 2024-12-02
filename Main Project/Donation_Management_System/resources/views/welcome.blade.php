/* public/css/style.css */
body {
    font-family: Arial, sans-serif;
    background-color: #f4f4f9;
    margin: 0;
    padding: 0;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
    text-align: center;
    color: #fff;
    background-image: url('/images/needy.jpg');
    background-size: cover;
    background-position: center;
    position: relative;
}

body::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(0, 0, 0, 0.4); /* Slight dark overlay */
    z-index: -1;
}

.container {
    max-width: 800px;
    position: relative;
    z-index: 1;
    color: white;
    padding: 20px;
    background-color: rgba(0, 0, 0, 0.6); /* Semi-transparent background */
    border-radius: 10px;
}

h1 {
    font-size: 36px;
    margin-bottom: 20px;
}

.box-container {
    display: flex;
    justify-content: space-around;
    margin: 20px 0;
}

.box {
    background-color: #3498db;
    padding: 20px;
    border-radius: 10px;
    width: 45%;
    text-align: center;
}

.box h2 {
    font-size: 24px;
    margin-bottom: 10px;
}

.box p {
    font-size: 16px;
    margin-bottom: 20px;
}

.box .btn {
    background-color: #2ecc71;
    color: white;
    padding: 10px 20px;
    border-radius: 25px;
    text-decoration: none;
    font-size: 16px;
    transition: background-color 0.3s ease;
}

.box .btn:hover {
    background-color: #27ae60;
}

.btn-container {
    margin-top: 30px;
}

.login-btn {
    font-size: 14px;
    padding: 8px 16px;
    background-color: #2ecc71;
    border-radius: 20px;
    color: #fff;
    text-decoration: none;
    transition: background-color 0.3s ease;
    margin: 0 10px;
}

.login-btn:hover {
    background-color: #c73e2c;
}

.table-box {
    margin-top: 50px;
    background-color: rgba(0, 0, 0, 0.7); /* Dark table background */
    padding: 20px;
    border-radius: 10px;
}

table {
    width: 100%;
    border-collapse: collapse;
    color: #fff;
}

table th, table td {
    padding: 10px;
    text-align: center;
}

table th {
    background-color: #3498db;
}

table tr:nth-child(even) {
    background-color: #2ecc71;
}

table a.btn {
    background-color: #3498db;
    padding: 8px 16px;
    border-radius: 20px;
    text-decoration: none;
    color: white;
    font-size: 14px;
    transition: background-color 0.3s ease;
}

table a.btn:hover {
    background-color: #c7552c;
}

.admin-btn {
    position: absolute;
    top: 20px;
    right: 20px;
    background-color: #7C2C28;
    color: #fff;
    padding: 10px 20px;
    border-radius: 5px;
    text-decoration: none;
    transition: background-color 0.3s ease;
}

.admin-btn:hover {
    background-color: #c7552c;
}

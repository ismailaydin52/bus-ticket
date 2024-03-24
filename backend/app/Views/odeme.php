<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title> Umuttepe Turizim Ödeme Sayfası</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.4.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
    />
    <style>
      body {
        background-color: #f8f9fa;
        font-family: Arial, sans-serif;
      }
      .container {
        margin-top: 50px;
      }
      h1 {
        color: #007bff;
        text-align: center;
        margin-bottom: 30px;
      }
      form {
        background-color: #fff;
        padding: 20px;
        border-radius: 10px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
      }
      label {
        font-weight: bold;
        color: #333;
      }
      input[type="text"] {
        width: 100%;
        padding: 10px;
        margin-bottom: 15px;
        border: 1px solid #ccc;
        border-radius: 5px;
      }
      button {
        padding: 10px 20px;
        background-color: #007bff;
        color: #fff;
        border: none;
        border-radius: 5px;
        cursor: pointer;
      }
      button:hover {
        background-color: #0056b3;
      }
    </style>
  </head>
  <body>
    <div class="container">
      <h1>Ödeme Sayfası</h1>
      <div class="row">
        <div class="col-md-6 offset-md-3">
          <form>
            <div class="mb-3">
              <label for="cardNumber" class="form-label">Kart Numarası</label>
              <input
                type="text"
                class="form-control"
                id="cardNumber"
                placeholder="Kart Numarası"
                required
              />
            </div>
            <div class="mb-3">
              <label for="expiryDate" class="form-label"
                >Son Kullanma Tarihi</label
              >
              <input
                type="text"
                class="form-control"
                id="expiryDate"
                placeholder="MM/YY"
                required
              />
            </div>
            <div class="mb-3">
              <label for="cvv" class="form-label">CVV</label>
              <input
                type="text"
                class="form-control"
                id="cvv"
                placeholder="CVV"
                required
              />
            </div>
            <button type="submit" class="btn btn-primary">Ödeme Yap</button>
          </form>
        </div>
      </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.4.3/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>

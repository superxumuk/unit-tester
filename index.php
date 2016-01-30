<html>

<head>
  <meta charset="utf-8">

  <!-- ���������� ����� Mocha, ��� ����������� ����������� -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/mocha/2.1.0/mocha.css">
 
 <!-- ���������� ���������� Mocha -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/mocha/2.1.0/mocha.js"></script>

  <!-- ����������� Mocha: ��������� BDD-������������ -->
  <script>
    mocha.setup('bdd');
  </script>

  <!-- ���������� chai -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/chai/2.0.0/chai.js"></script>

  <!-- � chai ���� ����� �����, ������� assert � ���������� ������� -->
  <script>
    var assert = chai.assert;
  </script>

  </head>

<body>
  <!-- ����������� ������ -->
  <script src="test.js"></script>

  <!-- � ���� ������� ��������� ����� -->
  <script src="spec.js"></script>

  <!-- � �������� � id="mocha" ����� ���������� ������ -->
  <div id="mocha"></div>

  <!-- ��������� �����! -->
  <script>
    mocha.run();
  </script>
</body>

</html>
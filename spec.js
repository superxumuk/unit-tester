describe("pow", function() {

  it("��� ���������� 0 � 0� ������� ��������� 1", function() {
    assert.equal(pow(0, 0), 1);
  });
  
  it("��� ���������� 0 � 56� ������� ��������� 0", function() {
    assert.equal(pow(0, 56), 0);
  });  
  
  it("��� ���������� 2 � 3� ������� ��������� 8", function() {
    assert.equal(pow(2, 3), 8);
  });

  it("��� ���������� 3 � 4� ������� ����� 81", function() {
    assert.equal(pow(3, 4), 81);
  });

});
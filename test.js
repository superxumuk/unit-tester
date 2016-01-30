function pow(a,n) {
	var result=1;
  for (var i = 0; i < n; i++) {
    result *= a;
  }
  return result;
};
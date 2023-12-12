package alpro;

public class WhileuntukFibonacci {

	public static void main(String[] args) {
		System.out.print(0);
		int fibo =0;
		int fib1 =1;
		int fib2 = fib1+fibo;
		
		while (fib2<1000) {
		fibo=fib1;
		fib1=fib2;
		fib2=fib1+fibo;
		System.out.print(", "+fib1);
		}
	}

}

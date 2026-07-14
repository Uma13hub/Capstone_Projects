import java.util.Scanner;
import java.util.*;

class Empire{
	Scanner sc=new Scanner(System.in);
	int guessNum,playerNum;
	public void guessNumber(){
		guessNum=sc.nextInt();
	}
	public int collectNumber(int i){
		System.out.print("\nEnter player "+i+" number :");
		playerNum=sc.nextInt();
		return playerNum;
	}
	public void winners(int[] arr){
	int c=0;
		for(int i=0;i<arr.length;i++){
			if(arr[i]==guessNum){
			c++;
			System.out.print("\n CONGRATS \nPlayer "+(i+1)+" Won\n");
			}
		}
		if(c==0)
			System.out.println(" \nGame Lost\n");
	}


}

class GuesserGame{
	public static void main(String args[]){
		Scanner s=new Scanner(System.in);
			Empire obj=new Empire();
		int l;
		do{
		System.out.print("\nEnter Guess Number :");
		obj.guessNumber();
		System.out.print("\nEnter number of players :");
		int n=s.nextInt();
		int[] arr=new int[n];
		for(int i=0;i<n;i++){
			arr[i]=obj.collectNumber(i+1);
		}
		obj.winners(arr); 
		System.out.print("Enter 1 to continue Enter 0 to Exit from Game :");
		l=s.nextInt();
		}while(l>0);
		if(l==0){
		System.out.println("\nGAME OVER\n");}
	}
}

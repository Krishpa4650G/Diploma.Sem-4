#include<stdio.h>
void main()
{
	int n,fact=1;
	printf("Enter value of n:\n");
	scanf("%d",&n);
	
	while(n!=0)
	{
		fact=fact*n;
		n=n-1;
	}
	printf("Fact is:%d",fact);
}

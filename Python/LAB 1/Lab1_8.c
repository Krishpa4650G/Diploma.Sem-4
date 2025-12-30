#include<stdio.h>
void main()
{
	int i,n;
	printf("Enter value of i:\n");
	scanf("%d",&i);
	printf("Enter value of n:\n");
	scanf("%d",&n);
	while(i<=n)
	{
		if(i%2==0)
		{
			printf("the even is:%d\n",i);
		}
		i++;
	}
}

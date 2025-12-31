#include <stdio.h>
void main()
{
	int a,b,c;
	printf("Enter value of a,b,c\n");
	scanf("%d%d%d",&a,&b,&c);
	if(a>b && a>c)
	{
		printf("A is max");
	}
	else if (b>a && b>c)
	{
		printf("B is max");
	}
	else
	{
		printf("C i max");
	}
}

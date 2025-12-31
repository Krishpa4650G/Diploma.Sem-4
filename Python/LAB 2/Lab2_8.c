#include <stdio.h>
void main ()
{
	int a,b,c;
	printf("Enter value of a,b,c :\n");
	scanf("%d%d%d",&a,&b,&c);
	(a>b && a>c)?printf("A is max"):(b>c && b>a)? printf("B is max"):printf("C is max");
}

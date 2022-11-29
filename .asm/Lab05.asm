.data
theStr: .space 128 
isPal: .asciiz "\nIts a Palindrome"
notPal: .asciiz "\nNot a Palindrome"
newLine: .asciiz "\n"
.text
main:

lb $t4,newLine
li $v0,8
la $a0,theStr
li $a1,128
syscall

#last char par jaata hu string ke
add $t2,$a0,$zero
last_char:
	lb $a2,($t2)
	addi $t2,$t2,1
	beq $a2,$t4,next
	bne $a2,$zero,last_char
next:
     add $t1,$a0,$zero
     addi $t2,$t2,-2
check_palin:
	bge $t1,$t2,is_pal
	lb $a1,($t1)
	lb $a2,($t2)
	addi $t2,$t2,-1
	addi $t1,$t1,1
	beq $a1,$a2,check_palin
not_pal:
	li $v0,4
	la $a0,notPal
	syscall
	j exit
is_pal:
	li $v0,4
	la $a0,isPal
	syscall
	j exit
exit:
	li $v0,10
	syscall
.data
list: .byte 's','a','m','b','h','a','v'
newLine: .asciiz "\n"
isPresent: .asciiz "It is present"
notPresent: .asciiz "It is not present"
Char: .asciiz "Please enter the character"
theStr: .space 2 
.text
main:
la $a0,Char
li $v0,4
syscall

la $a0,newLine
li $v0,4
syscall

li $v0,8
la $a0,theStr
li $a1,2
syscall

add $t2,$a0,$zero
lb $t3,($a0)
la $t0,list

search:
	lb $t4,($t0)
	addi $t0,$t0,1
	beq $t3,$t4,is_present
	bne $t4,$zero,search
not_present:
	li $v0,4
	la $a0,notPresent
	syscall
	j exit
is_present:
	li $v0,4
	la $a0,isPresent
	syscall
	j exit
exit:
	li $v0,10
	syscall




.data
shape: .asciiz "Please enter shape: triangle(0) or square(1)"
lines: .asciiz "Please enter no. of lines"
newLine: .asciiz "\n"
star:.asciiz "*"
.text
main:

la $a0,shape
li $v0,4
syscall

li $v0,5
syscall

move $t0,$v0

la $a0,newLine
li $v0,4
syscall

la $a0,lines
li $v0,4
syscall

la $a0,newLine
li $v0,4
syscall

li $v0,5
syscall

move $t1,$v0


beq $t0,0,print_triangle
jal square
j exit
print_triangle:
	jal triangle

exit:
	li $v0,10
	syscall

square:
 addi $sp,$sp,-4
 sw $ra,($sp)
 addi $a2,$t1,0
 print:
 	move $t2,$a2
 	beq $t1,$zero,exit_1
 	jal print_star_line
 	addi $t1,$t1,-1
 	la $a0,newLine
	li $v0,4
	syscall
 	j print
 	exit_1:
 		lw $ra,($sp)
 		addi $sp,$sp,4
 		jr $ra

triangle:
 addi $sp,$sp,-4
 sw $ra,($sp)
 addi $a2,$t1,1
 
  print_2:
  	sub $t2,$a2,$t1
 	beq $t1,$zero,exit_3
 	jal print_star_line
 	addi $t1,$t1,-1
 	la $a0,newLine
	li $v0,4
	syscall
	addi $t2,$t2,1
 	j print_2
 	exit_3:
 		lw $ra,($sp)
 		addi $sp,$sp,4
 		jr $ra


print_star_line:
 print_line:
	beq $t2,$zero,exit_2
	la $a0,star
	li $v0,4
	syscall
	addi $t2,$t2,-1
	j print_line
 exit_2:
 	jr $ra
.data
string: .asciiz "aeiouj"
vowels: .asciiz "aeiou"
newLine: .asciiz "\n"
.text
main:

la $a0,string
li $v0,4
syscall

la $a0,newLine
li $v0,4
syscall

jal modify_string

#print the modified string
la $a0,string
li $v0,4
syscall
la $a0,newLine
li $v0,4
syscall

#print count of vowels
move $a0,$t2
li $v0,1
syscall

li $v0,10
syscall
	
modify_string:
	la $a0,string
	
	check_string:
		lb $t0,($a0)
		beq $t0,$zero,exit
		la $v0,vowels
		check_vowel:
			lb $t1,($v0)
			beq $t1,$zero,end_vowel_loop
			beq $t0,$t1,mod
			addi $v0,$v0,1
			j check_vowel
			mod:
				addi $t2,$t2,1
				move $a1,$a0
				move $a2,$a0
				addi $a2,$a2,1
				remove_loop:
					lb $t3,($a1)
					lb $t4,($a2)
					beq $t3,$zero,end_remove_loop
					sb $t4,($a1)
					addi $a1,$a1,1
					addi $a2,$a2,1
					j remove_loop
					end_remove_loop: addi $a0,$a0,-1
					end_vowel_loop:
						addi $a0,$a0,1
						j check_string
					exit:
						jr $ra


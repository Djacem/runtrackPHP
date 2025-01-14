for i in range(101):
    if i == 42:
        print("La Plateforme_")
    elif 0 <= i <= 20:
        print(f"\033[3m{i}\033[0m")
    elif 25 <= i <= 50:
        print(f"\033[4m{i}\033[0m")
    else:
        print(i)
import os

for folder in os.listdir('./music'):
    print("For folder ", folder)
    for song in os.listdir(f'./music/{folder}/songs'):
        print('{' + f"""
            
                songName: '{song}',
                filePath: './songs/{song}',
            
        """ + '},')